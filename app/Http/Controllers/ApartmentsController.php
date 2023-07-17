<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\ApartmentsModel;
use App\Models\FileProcessingModel;
use App\Models\ImagePreprocessingModel;
use App\Models\ImagesModel;
use App\Http\Requests\StoreApartmentsRequest;
use App\Http\Requests\StoreApartmentsSpacesRequest;


class ApartmentsController extends Controller
{
    public function show():object
    {
        $apartmentslist = new ApartmentsModel();

        return view('apartments', [
            'apartmentslist' => $apartmentslist->getApartmentsList()
        ]);
    }

    public function dashboard():object
    {
        $list = new ApartmentsModel();

        return view('dashboard', [
            'apartmentslist' => $list->getApartmentsList(),
            'statuslist' => $list->getStatusList(),
        ]);
    }    

    public function edit(int $id):object
    {
        
        $list = new ApartmentsModel();
        $img = new ImagesModel();

        return view('edit-apartments', [
            'apartments' => $list->getApartment($id),
            'statuslist' => $list->getStatusList(),
            'buildingslist' => $list->getBuildingsList(),
            'offertypeslist' => $list->getOfferTypesList(),
            'max_storey' => $list->getMaxBuildingsStorey(),
            'insidespaceslist' => $list->getInsideSpacesList($id),
            'outsidespaceslist' => $list->getOutsideSpacesList($id),            
            'main_image' => $img->getMainImage($id),
            'sketch_image' => $img->get3dSketchImage($id),
            'gallerylist' => $img->getGalleryList($id),
            'isMainImageExist' => $img->isMainImageExist($id),
            'is3dSketchImageExist' => $img->is3dSketchImageExist($id),
        ]);
    }

    public function save(Request $request, StoreApartmentsRequest $apartments_request):RedirectResponse
    {
        $list = new ApartmentsModel();
        $list->updateApartmentTable($request, $apartments_request);

        if($request->apartment_card)
        {
            $image = new FileProcessingModel();
            $filename = $image->storeFile($request, 'apartment_card' , 'cards', 'public');

            $apart = new ApartmentsModel();
            $apart->updateApartmentCardTable($request, $filename);
        }

        if($request->main_image)
        {
            $image = new ImagePreprocessingModel();
            $filename = $image->storeImage($request, 'main_image' , 'images', 'public');

            $img = new ImagesModel();
            $img->insertImageTable($request, $filename, 'images');
        }

        if($request->sketch_image)
        {
            $image = new ImagePreprocessingModel();
            $filename = $image->storeImage($request, 'sketch_image' , 'images', 'public');

            $img = new ImagesModel();
            $img->insertSketchImageTable($request, $filename, 'images');
        }        

        if($request->gallery_image)
        {
            $image = new ImagePreprocessingModel();
            $filename = $image->storeImage($request, 'gallery_image' , 'gallery', 'public');

            $img = new ImagesModel();
            $img->insertImageTable($request, $filename, 'gallery');
        }        

        return redirect($list->getRedirectURL($request));
    }

    public function add_form():object
    {
        $list = new ApartmentsModel();

        return view('add-apartments', [
            'statuslist' => $list->getStatusList(),
            'buildingslist' => $list->getBuildingsList(),
            'offertypeslist' => $list->getOfferTypesList(),
            'max_storey' => $list->getMaxBuildingsStorey(),
        ]);
    }    

    public function save_add_form(Request $request, StoreApartmentsRequest $apartments_request):RedirectResponse
    {
        $list = new ApartmentsModel();
        $id = $list->storeApartmentTable($request, $apartments_request);

        return redirect('/apartments/edit/'.$id);
    }

    public function addspace_form(int $id):object
    {
        return view('add-apartments-space', [
            'id' => $id
        ]);
    }    

    public function save_addspace_form(StoreApartmentsSpacesRequest $apartments_spaces_request, int $id):RedirectResponse
    {
        $list = new ApartmentsModel();
        $list->storeApartmentSpacesTable($apartments_spaces_request, $id);

        return redirect('/apartments/edit/'.$id);
    }    

    public function delete(Request $request):RedirectResponse
    {
        $delete = new ApartmentsModel();
        $delete->deleteApartment($request);

        return redirect('/apartments');
    }    

    public function spaceDelete(Request $request):RedirectResponse
    {
        $delete = new ApartmentsModel();
        $delete->deleteApartmentSpaces($request);

        return redirect('/apartments/edit/'.$request->id);
    }     

    public function deleteImage(string $table, int $id):RedirectResponse
    {
        $image = new ImagesModel();
        $apart = $image->getApartment($id, $table);
        $delete = new ImagePreprocessingModel();
        $delete->deleteImageFile($table, $apart->filename);
        $image->deleteImage($id, $table);

        return redirect('/apartments/edit/'.$apart->apartments_id);
    }      

    public function deleteCard(int $id):RedirectResponse
    {
        $apart = new ApartmentsModel();
        $apartment = $apart->getApartment($id);
        $apart->clearApartmentCardTable($id);
        $delete = new FileProcessingModel();
        $delete->deleteFile('cards', $apartment->card, 'public');

        return redirect('/apartments/edit/'.$id);
    }       

    public function changeStatus(Request $request):RedirectResponse
    {
        $action = new ApartmentsModel();
        $action->changeStatusApartment($request);

        return redirect('/dashboard');
    }            
}

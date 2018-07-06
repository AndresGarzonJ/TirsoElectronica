<?php 

namespace App\Shop\Contacts\Repositories\Interfaces;

use App\Shop\Base\Interfaces\BaseRepositoryInterface;
use App\Shop\Contacts\Contact;
use Illuminate\Http\UploadedFile; 
use Illuminate\Support\Collection;
use Intervention\Image\ImageManagerStatic;

interface ContactRepositoryInterface extends BaseRepositoryInterface
{
    public function updateContact(array $params, int $id = 1) : bool;

    public function findContactById(int $id=1) : Contact;

    public function deleteFile(array $file, $disk = null) : bool;

    public function saveCoverImage(UploadedFile $file) : string;

}

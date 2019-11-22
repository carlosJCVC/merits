<?php

namespace App\Http\Controllers\Admin;

use App\Announcement;
use App\File;
use App\Http\Requests\FileRequest;
use App\Http\Requests\RequerimentRequest;
use App\Requirement;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FileController extends Controller
{
    /**
     * Get file
     */
    public function getRequirementFile(Announcement $announcement, Requirement $requirement)
    {
        $genericObject = new \stdClass;
        $genericObject->name = 'test.jpg';
        //$genericObject->name = 'test.jpg';
        return response()->json(['file' => $genericObject]);
    }

    /**
     * Upload the specified file of user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request, Announcement $announcement, Requirement $requirement)
    {
        $inputFile = $request->file('file');
        $user = Auth::user();
        $file = new File();
        $file->realname = $inputFile->getClientOriginalName();
        $file->path = $inputFile->store(
            File::GeneratePathStore($announcement->id, $user->id)
        );
        $file->user_id = $user->id;
        $file->requirement_id = $requirement->id;

        $file->save();

        return response()->json($file);
    }
}
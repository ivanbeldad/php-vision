<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\VisionService;
use Illuminate\Support\Facades\Storage;

class VisionController extends Controller
{

    /**
     * @var VisionService
     */
    private $visionService;

    public function __construct()
    {
        $this->visionService = new VisionService();
    }

    public function index()
    {
        return view('vision');
    }

    public function analyze(Request $request)
    {
        $folder = 'images';
        $filename = 'analyze.' . $request->file('image')->extension();
        $fileLocation = $folder . '/' . $filename;
        $request->file('image')->storeAs($folder, $filename);

        $urlAbsolute = '../storage/app/' . $fileLocation;

        $text = $this->visionService->getImageText($urlAbsolute);
        $text = str_replace("\n", '<br>', $text);

        return redirect()->route('result', ['text' => $text]);
    }

    public function result(Request $request)
    {
        return view('result', ['text' => $request->input('text')]);
    }

}

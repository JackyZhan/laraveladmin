<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArticleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

    /**
     * 富文本的图片上传功能，基于ckedit
     * 配置路径在/public/packages/frozennode/administrator/js/ckedit/config.js
     */
    public function upload(){
        $extensions = array('jpg','bmp','gif','png');
        $uploadFilename = $_FILES['upload']['name'];
        $extension = pathInfo($uploadFilename,PATHINFO_EXTENSION);
        if(in_array($extension,$extensions)){
            $uploadPath = public_path() . '/uploads/products/article/';
            $uuid = str_replace('.','',uniqid("",TRUE)).".".$extension;
            $desname = $uploadPath.$uuid;
            $previewname = '/uploads/products/article/'.$uuid;
            $tag = move_uploaded_file($_FILES['upload']['tmp_name'],$desname);
            $callback = $_REQUEST["CKEditorFuncNum"];
            echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($callback,'".$previewname."','');</script>";
        }else{
            echo "<font color=\"red\"size=\"2\">*文件格式不正确（必须为.jpg/.gif/.bmp/.png文件）</font>";
        }

    }

}
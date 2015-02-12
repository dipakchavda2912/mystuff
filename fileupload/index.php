<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>file uploading</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="css/uploadfile.min.css"/>
    </head>
    <body>
        <div>
            <div id="multi" class="tab-pane fade active in">
                <p>                
                </p>
                <h4>Jquery Multiple File Upload </h4>
                <div id="multipleupload" style="display: none;">Upload</div>
                <div>
                </div>
                <p></p>
            </div>
        </div>
        <script src="js/jquery.v.1.11.1.min.js"  language="javascript" type="text/javascript"></script>
        <script src="js/jquery.uploadfile.min.js"  language="javascript" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#multipleupload").uploadFile({
                    url: "http://localhost/mystuff/fileuploads/flupload/upload.php",
                    multiple: true,
                    fileName: "myfile"
                });
            });
        </script>        
    </body>
</html>
<!--
{#<div class="album_pic_input_out">
    <div class="album_pic">                        
        <img src="{{ asset( resize_web ~ tiny_thumb_size ~ event_image_dir ~ data.mainimage) }}" class="upload_album_image_box"/>
    </div>
    {{ form_start(frmuploadalbumpics, {"action" : path("collegelife_front_event_upload_album_pics_ajax"), "attr" : {"id":"upload"}}) }}
    <div class="file-upload btn btn-primary" id="drop">
        <span>Upload</span>
        <br>
        {{ form_widget(frmuploadalbumpics.file) }}                        
    </div>                    
    {{ form_end(frmuploadalbumpics) }}
</div>#}
{#<div class="album_pic_input_out">
    <div class="album_pic">                        
        <img src="{{ asset( resize_web ~ tiny_thumb_size ~ event_image_dir ~ data.mainimage) }}" class="upload_album_image_box"/>
    </div>                   
    <div id="drop" class="file-upload btn btn-primary">
        <div style="vertical-align:top;" class="ajax-upload-dragdrop">
            <div class="ajax-file-upload" style="position: relative; overflow: hidden; cursor: default;">Upload
                <form enctype="multipart/form-data" action="/collegelife/web/app_dev.php/uploadalbumpics" method="POST" style="margin: 0px; padding: 0px;">
                    <input type="file" multiple="" name="myfile[]" id="ajax-upload-id-1417246692853" style="position: absolute; cursor: pointer; top: 0px; width: 44px; height: 20px; left: 0px; z-index: 100; opacity: 0;">
                </form>
            </div>
        </div>                        
    </div>                    
</div>#}
<div class="album_pic_input_out">
    <div class="album_pic">                        
        <img src="{{ asset( resize_web ~ tiny_thumb_size ~ event_image_dir ~ data.mainimage) }}" class="upload_album_image_box"/>
    </div>                    
    <div class="file-upload btn btn-primary" id="drop">

    </div>
    <div id="multipleupload" style="display: none;">Upload</div>
</div>
-->
<?php

class VideoFormProvider{
        public function createUploadForm()
        {
            //création du formulaire
           $fileInput= $this->createFileInput();
           return "<form action='validation.php>' method='POST' enctype='multipart/form-data'>
                    $fileInput
                   </form>";
        }
       private function createFileInput()
        {
            return "
            <div class='form-group'>
                <input type='file' class='form-control-file' name='fileInput' required> 
            </div>
            ";
        }
}
?>
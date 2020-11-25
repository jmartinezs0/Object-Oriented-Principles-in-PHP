<?php
 
 class Downloader
 {
     protected $apps;

     public function download(apps $apps)
     {
         if (count($this->apps) > 3 ){

            throw new Exception('you have exceeded the download limit');
         }

         $this->apps[] = $apps;
     }

     public function apps()
     {
         return $this->apps;
     }
 }

 class appdownloadercontroller

 {
    public function store()
    {
        
        $downloader = new downloader;

        try {

        $downloader->download(new apps('Sony Vegas 16'));
        $downloader->download(new apps('Photoshop CC'));
        $downloader->download(new apps('VPN Express'));
        $downloader->download(new apps('Fluidsim'));

        var_dump($downloader->$apps);

        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }
 }

 (new appdownloadercontroller())->store();
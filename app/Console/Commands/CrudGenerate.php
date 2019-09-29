<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;

class CrudGenerate extends Command
{
   
    protected $signature = 'crud:generator
        {name : Class (singular) for example User}';

   
    protected $description = 'Create CRUD operations';
 
    public function __construct()
    {
        parent::__construct();
    }

    public function handle(){
        $name = $this->argument('name');

        $this->controller($name);
        $this->model($name);
        $this->request($name);

        File::append(base_path('routes/api.php'), 'Route::resource(\'' .  strtolower(Str::plural($name)) . "', '{$name}Controller');");

        Artisan::call('make:migration create_'. strtolower(Str::plural($name)) . '_table --create=' . strtolower(Str::plural($name)));}

    protected function getStub($type)
    {
        return file_get_contents(resource_path("stubs/$type.stub"));
    }

    protected function model($name){
        $template = str_replace(
            ['{{modelName}}'], 
            [$name], 
            $this->getStub('Model')
        );

        file_put_contents(app_path("/{$name}.php"), $template);}

    protected function request($name){
        $template = str_replace(
            ['{{modelName}}'],
            [$name],
            $this->getStub('Request')
        );

        if(!file_exists($path = app_path('/Http/Requests')))
            mkdir($path, 0777, true);

        file_put_contents(app_path("/Http/Requests/{$name}Request.php"), $template);}

    protected function controller($name){
        $template = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
                '{{modelNameSingularLowerCase}}'
            ],
            [
                $name, // Place
                strtolower(Str::plural($name)), // places
                strtolower($name), // place
            ],
            $this->getStub('Controller')
        );
        
        file_put_contents(app_path("/Http/Controllers/{$name}Controller.php"), $template);}

}

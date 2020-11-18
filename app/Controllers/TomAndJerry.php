<?php namespace App\Controllers;

class TomAndJerry extends BaseController
{
    public function index()
    {
        // connect to the model
    $character = new \App\Models\Character();
        // retrieve all the records
    $records = $character->findAll();
    
        // get a template parser
    $parser = \Config\Services::parser();
        // tell it about the substitions
    $table = new \CodeIgniter\View\Table();
    
    $headings = $character->fields;
    $table->setHeading($headings[1],$headings[3],"details");
    
    foreach ($records as $record) 
    {
        //$table->addRow($record->name,$record->description);
        $nameLink = anchor("TomAndJerry/showme/$record->id",$record->name);
        $table->addRow($record->name,"<img src=\"/image/".$record->image."\"/>",$nameLink);
    }
    
    $template = [
                'table_open' => '<table cellpadding="5px">',
                'cell_start' => '<td style="border: 1px solid #dddddd;">',
                'row_alt_start' => '<tr style="background-color:#dddddd">',
                ];
    $table->setTemplate($template);
    
   $fields = [
       'title' => 'TomAndJerry',
       'heading' => 'TomAndJerry',
       'footer' => 'Copyright XuetingJiang'];
    
    return $parser->setData($fields)->render('templates\top') .
           $table->generate().
           $parser->setData($fields)->render('templates\bottom');
    
    //return $parser->setData(['records' => $records])
        // and have it render the template with those
    //->render('characterlist');
    }
    public function showme($id)
    {
        // connect to the model
      $character = new \App\Models\Character();
        // retrieve all the records
      $record = $character->find($id);
      // get a template parser
      $parser = \Config\Services::parser();
      // tell it about the substitions
     
      $table = new \CodeIgniter\View\Table();
    
    $headings = $character->fields;
    $table->addRow($headings[0],$record['id'])
          ->addRow($headings[1],$record['name'])
          ->addRow($headings[2],$record['description'])
          ->addRow($headings[3],"<img src=\"/image/".$record['image']."\"/>")
          ->addRow($headings[4],$record['favorite'])
          ->addRow($headings[5],$record['varireties'])
          ->addRow($headings[6],$record['country'])
          ->addRow($headings[7],$record['character'])
;

    $template = [
                'table_open' => '<table cellpadding="5px">',
                'cell_start' => '<td style="border: 1px solid #dddddd;">',
                'row_alt_start' => '<tr style="background-color:#dddddd">',
                ];
    $table->setTemplate($template);
    
   $fields = [
       'title' => 'TomAndJerry Character',
       'heading' => 'TomAndJerry Character',
       'footer' => 'Copyright XuetingJiang'
       ];
      
      //return $parser->setData($record)
      // and have it render the template with those
     // ->render('oneplace');
   return $parser->setData($fields)->render('templates\top') .
           $table->generate().
           $parser->setData($fields)->render('templates\bottom');
    }
}
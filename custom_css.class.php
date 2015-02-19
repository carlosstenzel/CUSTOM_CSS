<?php
/*
 ________  ________  ________  _______                               
|\   ____\|\   __  \|\   ___ \|\  ___ \                              
\ \  \___|\ \  \|\  \ \  \_|\ \ \   __/|                             
 \ \  \    \ \  \\\  \ \  \ \\ \ \  \_|/__                           
  \ \  \____\ \  \\\  \ \  \_\\ \ \  \_|\ \                          
   \ \_______\ \_______\ \_______\ \_______\                         
    \|_______|\|_______|\|_______|\|_______|                         
                                                                     
                                                                     
                                                                     
 ___  ___  ________  _____ ______   ________  _______   ________     
|\  \|\  \|\   __  \|\   _ \  _   \|\   __  \|\  ___ \ |\   __  \    
\ \  \\\  \ \  \|\  \ \  \\\__\ \  \ \  \|\  \ \   __/|\ \  \|\  \   
 \ \   __  \ \   __  \ \  \\|__| \  \ \   ____\ \  \_|/_\ \   _  _\  
  \ \  \ \  \ \  \ \  \ \  \    \ \  \ \  \___|\ \  \_|\ \ \  \\  \| 
   \ \__\ \__\ \__\ \__\ \__\    \ \__\ \__\    \ \_______\ \__\\ _\ 
    \|__|\|__|\|__|\|__|\|__|     \|__|\|__|     \|_______|\|__|\|__|
                                                                     
                                                                     
                                                                     
# stenzel@hotmail.com
# www.codehamper.com

*/

/**
 * ------------------------------------------
 * CUSTOM CSS
 * Framework php para criação de css de facil
 * customização
 * Carlos Stenzel -> www.carlosstenzel.com
 * CodeHamper -> www.codehamper.com
 * -------------------------------------------
*/

class Custom_css{

	/**
	 * $nome -> nome do estilo
	 * $atributos -> atributos
    * $loaded -> array de estilos carregados
   */
   
	private $nome;
   private $atributos;
	
	public function __construct($nome){
   	$this->nome = $nome;	
	}
	
	public function __set($nome, $value){
		$nome = str_replace('_','-', $nome);
		$this->atributos[$nome] = $value;	
	}
	   
   public function Inicio_file($file) {
      $file= $file = fopen($file, "w");
      $txt="/**
 * ------------------------------------------
 * CUSTOM CSS
 * Framework php para criação de css de facil
 * customização
 * Carlos Stenzel -> www.carlosstenzel.com
 * CodeHamper -> www.codehamper.com
 * -------------------------------------------
*/      
";
      fwrite($file,$txt);
      fclose($file);
   }
    
   public function show($file){
         $file = fopen($file, "a");
			fwrite($file,"{$this->nome}");
			fwrite($file,"{\n");
			if($this->atributos){
				foreach($this->atributos as $name=>$value){
					fwrite($file,"\t {$name}: {$value};\n");				
				}			
			}
		   fwrite($file,"}\n");
		   fclose($file);

   }  
      	

}

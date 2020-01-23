<?php
if(isset($_POST['submit_ajout_animal'])) {
    // Je récup les données du formulaire en POST
    $prenom=$_POST['book__edit__name'];
    $description=$_POST['info_edit_description'];

    if ($prenom != ""){
        $id = wp_insert_post(array(
            'post_title'=> $prenom, 
            'post_type'=>'animal', 
            'post_content'=> $description,
            'post_status' => 'publish',
      ));
      wp_redirect(get_permalink(70));
      exit;
    
    }
  
}
?>



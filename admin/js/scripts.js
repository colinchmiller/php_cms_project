// WYSIWYG editor
tinymce.init({ selector:'textarea' });

//select all posts on checkbox
$(document).ready(function(){
  $('#selectAllBoxes').click(function(event){
    if(this.checked){
      $('.checkBoxes').each(function(){
        this.checked = true;
      });
    } else {
      $('.checkBoxes').each(function(){
        this.checked = false;
      });
    }
  });
});

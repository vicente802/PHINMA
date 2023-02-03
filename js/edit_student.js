$(document).ready(function(){
     
    $(".edit_student").each(function(i,e){
        var id=e.dataset.id;
        $(e).click(function(){
            console.log(id);
            $.ajax({
                url:"../routes/student/edit_student.php",
                method:"POST",
                data:{
                    id: id
                },
                success:function(response){
                   
                    console.log(response);
                    $(".stundent_name").text(response.firstname);
                }

            
            });
            
        });

    });
});
@extends('layouts.template_admin')

@section('content')
<head><title>Catégories</title>

</head>
<span id="page_data">
 @include('paginate_data_categories')
</span>
@endsection
<!-- ==================== script part ===================== -->

 
@push('scripts')
    <script type="text/javascript">
       $(document).ready(function(){
         $(document).on('click', '.pagination a',function(event){
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            getCategorie(page);

         });
       });  

       function getCategorie(page){
         $.ajax({
            type: "GET",
            url: "{{ route('catégories.getCat') }}" + "?page=" + page,
            
            success:function(data){
               $('#page_data').html(data);
            }

         });
       }   
 
    </script>
    
    <script type="text/javascript">
     
     $(document).ready(function(){
      $('#categorieForm').submit(function(e){
        e.preventDefault();
        var libelle = $("input[name=libelle]").val();
        var _token = $("input[name=_token]").val();
        
        $.ajax({
           url:"{{route('categorie.add')}}",
           type:"POST",
           data: {
               libelle:libelle,
               _token:_token
           },
           
           success:function(response){
              console.log(response)
              var html = '';
              if(response.errors){

                html = '<div class="alert alert-danger mt-3">';
                for(var count = 0; count < response.errors.length; count++)
                {
                  html += '<p>' + response.errors[count] + '</p>';
                }
                html += '</div>';
                

              }
              else{
                $('.modal').modal('hide');
                $('#categorieForm')[0].reset();

                $('#divid').load(' #divid');
                
                
              }
              $('#categorie_result').html(html);
              
           },
        });
       });
      });
     
    </script>

    <script >
      
       function editCategorie(id){
         $.get('/catégories/'+id,function(categorie){

           $('#id').val(categorie.id);
           $('#libelleEdit').val(categorie.libelle);
           $('#categorieEditModal').modal('toggle');
         });
       }

       $('#categorieEditForm').submit(function(e){
        e.preventDefault();
        var id = $('#id').val();
        var libelle = $('#libelleEdit').val();
        var _token = $("input[name=_token]").val();

        $.ajax({
           url:"{{route('categorie.update')}}",
           type:"PUT",
           data: {
               id:id,
               libelle:libelle,
               _token:_token
           },
           
           success:function(response){
              console.log(response)
              var html = '';
              if(response.errors){

                html = '<div class="alert alert-danger mt-3">';
                for(var count = 0; count < response.errors.length; count++)
                {
                  html += '<p>' + response.errors[count] + '</p>';
                }
                html += '</div>';
                

              }
              else{
                $('.modal').modal('hide');
                $('#categorieEditForm')[0].reset();

                $('#divid').load(' #divid');
                
                
              }
              $('#categorie_result1').html(html);
              
           },
        });
       })
    </script>

    <script type="text/javascript">
      function deleteCategorie(id){
        
        if(confirm("do you really want to delete this category ?"))
        {
            $.ajax({
              url:'/delete-categorie/'+id,
              type:'DELETE',
              data:{
                _token:$("input[name=_token]").val()
              },
              success:function(response)
              {
                 $('#sid'+id).remove();
              }

            })
        }
      }
    </script>

@endpush
  




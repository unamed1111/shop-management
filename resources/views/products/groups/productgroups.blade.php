@extends('layouts.master')

@section('title','ProductGroup')

@section('css')
    <link href="{{asset('assets/vendors/material-icons/material-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/vendors/mono-social-icons/monosocialiconsfont.css')}}" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.4/sweetalert2.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.1.3/mediaelementplayer.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-footable/3.1.4/footable.bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/jquery.nestable.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.1/jquery.toast.min.css" rel="stylesheet" type="text/css">
 @endsection

@section('content')
    <main class="main-wrapper clearfix">
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
        @include('products.groups.index')
    </main>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.2/umd/popper.min.js"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.1.3/mediaelementplayer.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.0/metisMenu.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/js/perfect-scrollbar.jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.4/sweetalert2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-footable/3.1.4/footable.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="{{asset('assets/js/jquery.nestable.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
<script>
  $(document).ready(function(){
    $(document).on('click','.delete',function(){
        var id = $(this).closest('li').data('id');
        $.ajax({
            url: '/ProductGroups/' + id ,
            type: 'POST',
            dataType: 'html',
            data:{ _method: 'DELETE', _token : '{{csrf_token()}}'},
            success: function(result){
                $('main').empty();
                $('main').html(result);
            }  
        })
    });

    $(document).on('click','.edit',function(){
        var id = $(this).closest('li').data('id');
        var name = $(this).closest('div').data('name');
        var parent_id = $(this).closest('ol').closest('li').data('id');
        $('.button_add').css("display","none");
        $('.button_edit').css("display","");
        $('.button_cancel').css("display","");
        $('#name').val(name);
        $('#name').focus();
        $('#id').val(id);
        $('#parent_id').val(parent_id);
    });

    $(document).on('click','.button_cancel',function(){
        $('.button_add').css("display","");
        $('.button_edit').css("display","none");
        $('.button_cancel').css("display","none");
        $('#name').val("");
        $('#parent_id').val("");
    });

    $(document).on('click','.button_edit',function(){
        var id = $('#id').val();
        $.ajax({
            url: '/ProductGroups/' + id ,
            type: 'POST',
            dataType: 'html',
            data:{name : $("#name").val(), parent_id: $("#parent_id").val(), _token: "{{csrf_token()}}", _method: "PUT"},
            success: function(result){
                $('main').empty();
                $('main').html(result);
            },
            error: function(error) {
               var errors = JSON.parse(error.responseText);
               var error_message = errors.error.name[0];
               var status_code = errors.status_code;
               $.toast({
                    heading: 'Welcome to Oscar Admin',
                    text: error_message,
                    position: 'bottom-center',
                    icon: 'error',
                    stack: false
                });            
           }   
        })
    });

    $(document).on('click','.button_add',function(){
        $.ajax({
            url: '/ProductGroups',
            type: 'POST',
            dataType: 'html',
            data:{name : $("#name").val(), parent_id: $("#parent_id").val(), _token: "{{csrf_token()}}"},
            success: function(result){
                $('main').empty();
                $('main').html(result);
            },
            error: function(error) {
               var errors = JSON.parse(error.responseText);
               var error_message = errors.error.name[0];
               var status_code = errors.status_code;
               $.toast({
                    heading: 'Welcome to Oscar Admin',
                    text: error_message,
                    position: 'bottom-center',
                    icon: 'error',
                    stack: false
                });            
           }
        })
    }); 
          
  }); 
</script>
@endsection

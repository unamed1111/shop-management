@extends('layouts.master')

@section('title','Thuộc Tính')

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
        <div class="widget-list">
		    <div class="row">
		        <div class="col-md-12 widget-holder">
		            <div class="widget-bg">
		                <div class="widget-body clearfix">
		                    <h5 class="box-title mr-b-0">Tạo thuộc tính</h5>
		                    <form class="form-material" id="group">
		                        <div class="row">
		                            <div class="col-lg-12">
		                                <div class="form-group">
		                                    <input class="form-control" id="name" type="text" name="name">
		                                    <input type="hidden" name="id" id="id">
		                                    <label for="name">Tên thuộc tính</label>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="form-actions btn-list">
		                            <button class="btn btn-primary button_add" type="button" >THÊM</button>
		                            <button class="btn btn-primary button_edit" type="button" style="display:none;">CẬP NHẬT</button>
		                            <button class="btn btn-outline-default button_cancel" type="button" style="display:none;">HỦY</button>
		                        </div>
		                    </form>
		                </div>
		                <!-- /.widget-body -->
		            </div>
		            <!-- /.widget-bg -->
		        </div>
		        <!-- /.widget-holder -->
		        <div class="col-md-12 widget-holder">
		            <div class="widget-bg">
		                <div class="widget-body clearfix">
		                    <h5 class="box-title">Danh Sách Thuộc Tính <small>(drag to sort)</small></h5>
		                    <ol class="list-group" id='list-attributes'>
		                        <li class="list-group-item d-flex">
		                            <div class="mr-auto">The fastest way to get started</div>
		                            <div><a href="javascript:void(0);"><i class="material-icons list-icon">edit</i></a>  <a href="javascript:void(0);"><i class="material-icons list-icon">close</i></a>
		                            </div>
		                        </li>
		                    </ol>
		                    <!-- /.row -->
		                </div>
		                <!-- /.widget-body -->
		            </div>
		            <!-- /.widget-bg -->
		        </div>
		        <!-- /.widget-holder -->
		    </div>
		    <!-- /.row -->
		</div>
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
    <script src="{{asset('assets/js/theme.js')}}"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			var attributes = JSON.parse(@json($attributes));
			ShowList(attributes);

			$(document).on('click','.edit',function(){
		        var id = $(this).closest('li').data('id');
		        var name = $(this).closest('li').data('name');
		        $('.button_add').css("display","none");
		        $('.button_edit').css("display","");
		        $('.button_cancel').css("display","");
		        $('#name').val(name);
		        $('#name').focus();
		        $('#id').val(id);
		    });

		    $(document).on('click','.button_cancel',function(){
		        $('.button_add').css("display","");
		        $('.button_edit').css("display","none");
		        $('.button_cancel').css("display","none");
		        $('#name').val("");
		    });

			$(document).on('click', '.button_add', function() {
				$.ajax({
					url: '/Attributes',
					type: 'POST',
					dataType: 'json',
					data: {name: $('#name').val(), _token: '{{csrf_token()}}'},
					success: function(result){
						$('#name').val("");
						ShowList(result);
					},
					error: function(error){
						var error = JSON.parse(error.responseText);
						ShowAlert(error);
					}
				})
			});

			$(document).on('click','.delete',function(){
		        var id = $(this).closest('li').data('id');
		        $.ajax({
		            url: '/Attributes/' + id ,
		            type: 'POST',
		            dataType: 'json',
		            data:{ _method: 'DELETE', _token : '{{csrf_token()}}'},
		            success: function(result){
		            	ShowList(result);
		            }  
		        })
		    });

		    $(document).on('click','.button_edit',function(){
		        var id = $('#id').val();
		        $.ajax({
		            url: '/Attributes/' + id ,
		            type: 'POST',
		            dataType: 'json',
		            data:{name : $("#name").val(), _token: "{{csrf_token()}}", _method: "PUT"},
		            success: function(result){
		            	$('.button_add').css("display","");
				        $('.button_edit').css("display","none");
				        $('.button_cancel').css("display","none");
				        $('#name').val("");
		                ShowList(result);
		            },
		            error: function(error) {
		               var error = JSON.parse(error.responseText);
						ShowAlert(error);
						$('#name').focus();            
		           }   
		        })
		    });

			function ShowList(result){
				var list = "";
				for (var i = 0; i <= result.length - 1; i++) {
					list += 		
						"<li class='list-group-item d-flex' data-id="+result[i].id+" data-name="+result[i].name+">"+
                            "<div class='mr-auto'>"+result[i].name+"</div>"+
                            "<div>"+
                            "<a href='javascript:void(0);'><i class='material-icons list-icon edit'>edit</i></a>" +
                            "<a href='javascript:void(0);'><i class='material-icons list-icon delete'>close</i></a>"+
                            "</div>"+
                       	"</li>";
				}
				$('#list-attributes').html(list);
			}
			function ShowAlert(error){
				var error_lists = '';
				for (var i = 0; i <= error.error.name.length - 1; i++) {
					error_lists += "<li>"+error.error.name[i]+"</li>";
				}

				$.toast({
                    heading: 'Welcome to Oscar Admin',
                    text: '<ul>'+error_lists+'</ul>',
                    position: 'bottom-center',
                    icon: 'error',
                    stack: false
                });        
			}
		});
	</script>
 @endsection   


@extends('web.pagina-web-plantilla')
@section('contenido')


		
<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url({{ asset('web/images/bg-02.jpg')}});">
	<h2 class="ltext-105 cl0 txt-center">
		Registro Producto
	</h2>
</section>	


<!-- Content page -->
<section class="bg0 p-t-104 p-b-116">
	<div class="container">
		<div class="flex-w flex-tr">
			<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
				<form action="{{ route('guardar.producto') }}" method="POST" enctype="multipart/form-data">
					@csrf


					<h4 class="mtext-105 cl2 txt-center p-b-30">
						LLENAR DATOS
					</h4>

                    <div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">ID</label>
						<input type="text" class="form-control" name="ID" id="exampleFormControlInput1" placeholder="ID ">
					  </div>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">nombre</label>
						<input type="text" class="form-control" name="nombre" id="exampleFormControlInput1" placeholder="ingrese su nombre">
					  </div>


					  <label for="exampleFormControlInput1" class="form-label">Categoria</label>
					  <select class="form-select" aria-label="Default select example">
						<option selected>Categoria</option>
						<option value="1">sudadera</option>
						<option value="3">ropa</option>
					  </select>

					  <div class="mb-3">
						<label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
						<textarea type="text" class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3"></textarea>
					  </div>
					  <div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Imagen</label>
						<input type="file" class="form-control" name="imagen"id="exampleFormControlInput1" placeholder="Buscar foto">
					  </div>
					  <div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Precio</label>
						<input type="text" class="form-control" name="precio"id="exampleFormControlInput1" placeholder="precio">
					  </div>
					  <div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">stock</label>
						<input type="text" class="form-control" name="stock" id="exampleFormControlInput1" placeholder="stock">
					  </div>
			
					  <label for="exampleFormControlInput1" class="form-label">Fecha registro</label>

					  <select class="form-select" aria-label="Default select example">
						<option selected>Fecha registro</option>
						<option value="1">15-08-2023</option>
						<option value="2">30-03-2023</option>
						<option value="3">23-05-2023</option>
					  </select>










					  <button type = "submit" class= " flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
						Guardar Datos
					</button>
				</form>
			</div>

			<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
				<div class="flex-w w-full p-b-42">
					<span class="fs-18 cl5 txt-center size-211">
						<span class="lnr lnr-map-marker"></span>
					</span>

					<div class="size-212 p-t-2">
						<span class="mtext-110 cl2">
							Address
						</span>

						<p class="stext-115 cl6 size-213 p-t-18">
							Coza Store Center 8th floor, 379 Hudson St, New York, NY 10018 US
						</p>
					</div>
				</div>

				<div class="flex-w w-full p-b-42">
					<span class="fs-18 cl5 txt-center size-211">
						<span class="lnr lnr-phone-handset"></span>
					</span>

					<div class="size-212 p-t-2">
						<span class="mtext-110 cl2">
							Lets Talk
						</span>

						<p class="stext-115 cl1 size-213 p-t-18">
							+1 800 1236879
						</p>
					</div>
				</div>

				<div class="flex-w w-full">
					<span class="fs-18 cl5 txt-center size-211">
						<span class="lnr lnr-envelope"></span>
					</span>

					<div class="size-212 p-t-2">
						<span class="mtext-110 cl2">
							Sale Support
						</span>

						<p class="stext-115 cl1 size-213 p-t-18">
							contact@example.com
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

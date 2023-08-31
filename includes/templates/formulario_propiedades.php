<fieldset>
					<legend>Informacion General</legend>

					<label for="titulo">Titulo:</label>
					<input type="text" id="titulo" name="propiedad[titulo]"  placeholder="Titulo Propiedad" value="<?php echo s( $propiedad->titulo )?>" />
				
					<label for="precio">Precio:</label>
					<input type="number" id="precio" name="propiedad[precio]" placeholder="Precio Propiedad" value="<?php echo s($propiedad->precio )?>" />
				
					<label for="imagen">Imagen:</label>
					<input type="file" id="imagen"accept="image/jpg, image/png" name="propiedad[imagen]" />
     <?php if($propiedad->imagen) { ?>
      <img src="/bienesraices/imagenes/<?php echo $propiedad->imagen ?>" class="imagen-small" />
      <?php } ?>
					<label for="descripcion">Descripcion:</label>
					<textarea id="descripcion" name="propiedad[descripcion]"><?php echo s($propiedad->descripcion) ?></textarea>
					
				</fieldset>


				<fieldset>
					<legend for="habitaciones">Habitaciones</legend>
					<input type="number" id="habitaciones" name="propiedad[habitaciones]" placeholder="Ej: 2" min="1" max="9" value="<?php echo s($propiedad->habitaciones) ?>">

					<legend for="wc">Baños</legend>
					<input type="number" id="wc" name="propiedad[wc]" placeholder="Ej: 1" min="1" max="9" value="<?php echo s($propiedad->wc) ?>">

					<legend for="estacionamiento">Estacionamiento</legend>
					<input type="number" id="estacionamiento" name="propiedad[estacionamiento]" placeholder="Ej: 3" min="1" max="9" value="<?php echo s($propiedad->estacionamiento) ?>">

					</fieldset>
					<fieldset>
							<legend>Vendedor</legend>
							<label for ="vendedor">Vendedor<label>
						<select name="propiedad[vendedorId]" id="vendedor" >
							<option selected value = " ">--Seleccione--</option>
							<?php foreach($vendedores as $vendedor) { ?>
								<option 
								<?php echo $propiedad-> vendedorId === $vendedor->id ? 'selected' : ''; ?>
								value="<?php echo s($vendedor->id) ?>"><?php echo s($vendedor->nombre). " ". s($vendedor->apellido); ?></option>
								<?php }?>
					</fieldset>
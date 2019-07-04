import { Component, OnInit } from '@angular/core';
import { Producto } from '../interfaces/producto';
import { UnidadMedida } from '../interfaces/unidad-medida';
import { ProductosService } from '../services/productos.service';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-create',
  templateUrl: './create.component.html',
  styleUrls: ['./create.component.css']
})
export class CreateComponent implements OnInit {

	producto: Producto = {
		producto:null,
		presentacion:null,
		cantidad:null,
		unidadMedida:null,
		precio:null,
		presentacion_id:0,
		unidadMedida_id:0
	};

	unidadesMedida: UnidadMedida[];

	id:any;
	editing:boolean = false;

	productos:Producto[];

	constructor(private productosService: ProductosService, private activatedRoute: ActivatedRoute) {

		this.id = this.activatedRoute.snapshot.params['id'];

		if(this.id){

			this.editing = true;
			
			this.productosService.get().subscribe((data:Producto[]) => {
				this.productos = data;
				this.producto = this.productos.find((p) => {return p.id == this.id})
				console.log(this.producto);
			}, (error) => {
				console.log(error);
			});
		}else{
			this.editing = false;
		}
		
		this.productosService.getUnidadesMedida().subscribe((data: UnidadMedida[]) => {
	      this.unidadesMedida = data;
	    }, (error) => {
	      console.log(error);
	      alert("Ocurrió un error");
	    });


	}

  	ngOnInit() {
  	}

  	guardarProducto(){

  		if(this.editing) {

  			this.productosService.put(this.producto).subscribe((data) => {
				alert('Producto actualizado');
				console.log(data);
			}, (error) => {
				console.log(error);
				alert("Ocurrió un error");
			});	

  		}else{
	  		this.productosService.save(this.producto).subscribe((data) => {
				alert('Producto guardado');
				console.log(data);
			}, (error) => {
				console.log(error);
				alert("Ocurrió un error");
			});		
  		}
  	}
}

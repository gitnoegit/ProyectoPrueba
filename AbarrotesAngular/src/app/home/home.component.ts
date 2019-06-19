import { Component, OnInit } from '@angular/core';
import { ProductosService } from '../services/productos.service';
import { Producto } from '../interfaces/producto';


@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

	productos:Producto[];
  pageActual: number = 1;
  filterProducto = '';

  constructor(private productosService: ProductosService) { 
    this.getProductos();
  }

  getProductos(){
    this.productosService.get().subscribe((data: Producto[]) => {
      this.productos = data;
    }, (error) => {
      console.log(error);
      alert("Ocurrió un error");
    });
  }

  ngOnInit() {
  }

  delete(id) {

    if(confirm("¿Seguro que deseas eliminar este producto?")) {
      this.productosService.delete(id).subscribe((data: Producto[]) => {
        alert("Eliminado con éxito");
        console.log(data);
        this.getProductos();
      }, (error) => {
        console.log(error);
        alert("Ocurrió un error");
        console.log(error);
        });
      }
    }

}

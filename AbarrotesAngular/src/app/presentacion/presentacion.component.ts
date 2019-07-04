import { Component, OnInit } from '@angular/core';
import { Presentacion } from '../interfaces/presentacion';
import { PresentacionesService } from '../services/presentaciones.service';
import { Producto } from '../interfaces/producto';
import { Input } from '@angular/core';

@Component({
  selector: 'app-presentacion',
  templateUrl: './presentacion.component.html',
  styleUrls: ['./presentacion.component.css']
})
export class PresentacionComponent implements OnInit {

	presentaciones:Presentacion[];
  @Input('producto') productoSelected:Producto;

  constructor(private presentacionesService: PresentacionesService) { 

  	this.presentacionesService.get().subscribe((data: Presentacion[]) => {
      this.presentaciones = data;
    }, (error) => {
      console.log(error);
      alert("Ocurrió un error");
    });

  }

  ngOnInit() {
  }

}

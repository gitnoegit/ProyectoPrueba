import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'filter'
})
export class FilterPipe implements PipeTransform {

  transform(value: any, arg?: any): any {

  	const resultProductos = [];
  	
  	if(value == null)
  		return resultProductos;

    for (const prod of value) {
  		if(prod.producto.toLowerCase().indexOf(arg.toLowerCase()) > -1 
        || prod.presentacion.toLowerCase().indexOf(arg.toLowerCase()) > -1
        || prod.unidadMedida.toLowerCase().indexOf(arg.toLowerCase()) > -1){
        resultProductos.push(prod);
  		}
  	}
    return resultProductos;
  }

}

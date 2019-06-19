import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Producto } from '../interfaces/producto';

@Injectable({
  providedIn: 'root'
})
export class ProductosService {

	API_ENDPOINT = 'http://localhost:8000';

  constructor(private httpClient: HttpClient) { }

  get() {
    return this.httpClient.get(this.API_ENDPOINT + '/productos')
  }

  save(producto: Producto){
  	const headers = new HttpHeaders({'Content-Type': 'application/json'});
  	return this.httpClient.post(this.API_ENDPOINT + '/productos', producto, {headers: headers});
  }

  put(producto: Producto) {
    const headers = new HttpHeaders({'Content-Type': 'application/json'});
    return this.httpClient.put(this.API_ENDPOINT + '/productos/' + producto.id, producto, {headers: headers});
  }

  delete(id) {
    return this.httpClient.delete(this.API_ENDPOINT + '/productos/' + id);
  }

  getPresentaciones() {
    return this.httpClient.get(this.API_ENDPOINT + '/presentaciones');
  }

  getUnidadesMedida() {
    return this.httpClient.get(this.API_ENDPOINT + '/unidadMedidas');
  }
}

import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class PresentacionesService {

	API_ENDPOINT = 'http://localhost:8000';

	constructor(private httpClient: HttpClient) { }

	get() {
	    return this.httpClient.get(this.API_ENDPOINT + '/presentaciones');
	}
}

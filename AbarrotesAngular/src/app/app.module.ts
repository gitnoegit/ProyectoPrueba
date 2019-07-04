import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HomeComponent } from './home/home.component';
import { CreateComponent } from './create/create.component';
import { Route, RouterModule } from '@angular/router';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule } from '@angular/forms';
import {NgxPaginationModule} from 'ngx-pagination';
import { FilterPipe } from './pipes/filter.pipe';
import { PresentacionComponent } from './presentacion/presentacion.component';

const routes: Route[] = [
{path: '', component: HomeComponent},
{path: 'home', component: HomeComponent},
{path: 'create', component: CreateComponent},
{path: 'edit/:id', component: CreateComponent}
];

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    CreateComponent,
    FilterPipe,
    PresentacionComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    RouterModule.forRoot(routes),
    HttpClientModule,
    FormsModule,
    BrowserModule,  //NgxPaginationModule
    NgxPaginationModule //NgxPaginationModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }

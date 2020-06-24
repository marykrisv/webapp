import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { UsersRoutingModule } from './user-routing.module';
import { ViewuserComponent } from './viewuser/viewuser.component';
import { AdduserComponent } from './adduser/adduser.component';
import { UserdetailComponent } from './userdetail/userdetail.component';
import { ReactiveFormsModule } from '@angular/forms';


@NgModule({
  declarations: [ViewuserComponent, AdduserComponent, UserdetailComponent],
  imports: [
    CommonModule,
    UsersRoutingModule,
    ReactiveFormsModule
  ]
})
export class UsersModule { }

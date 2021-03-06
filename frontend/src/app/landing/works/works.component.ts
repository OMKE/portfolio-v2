import { setTitle } from './../../core/utilities';
import { Title } from '@angular/platform-browser';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-works',
  templateUrl: './works.component.html',
  styleUrls: ['./works.component.scss']
})
export class WorksComponent implements OnInit {

  constructor(private title: Title) { }

  ngOnInit(): void {
    setTitle(this.title, 'Works');
  }

}

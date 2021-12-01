import { Component, OnInit } from '@angular/core';
import { MessageService } from '../../services/messages/message.service';
import { PaperService } from '../../services/papers.service';

import { PaperModel } from '../../models/paper/paper.model';

@Component({
  selector: 'app-data',
  templateUrl: './data.component.html',
  styleUrls: ['./data.component.css']
})
export class DataComponent implements OnInit {

  paper: PaperModel = {};
  papers: PaperModel[] = [];
  ngOnInit() {
    this.getPapers();

  }
  constructor(
    private PaperService: PaperService,
    private MessageService: MessageService,
  ) { }
  // obtiene un registro de la base de datos
  getPaper(Paper: PaperModel) {
    this.PaperService.getOne(Paper.id).subscribe(
      response => {
        // console.log(response.data);
        this.paper = response.data;
      }, error => {
        this.MessageService.error(error);
      }
    );
  }
  //obtiene todos los registro de la base de datos
  getPapers() {
    this.PaperService.getAll().subscribe(
      response => {
        this.getPaper(response.data[0]);

        this.papers = response.data;
        // console.log(typeof this.paper);
        // console.log(this.paper);
      }, error => {
        this.MessageService.error(error);
      }
    );
  }
}

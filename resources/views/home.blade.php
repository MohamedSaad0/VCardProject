@extends('layouts.app')

@section('content')

     <div class="card card-primary">
         <div class="card-header">

         </div>
         <!-- /.card-header -->
         <!-- form start -->
         <div class="card-body">
             <div id="allCompanies">
             <div class="form-group">
                 <label for="exampleInputEmail1">Full name</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
             </div>

             <div class="form-group">
                 <label for="exampleInputEmail1">Company name</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter company name">
             </div>


                 <div class="form-group">
                     <label for="exampleInputEmail1">Job title</label>
                     <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter job">
                 </div>

                 <div class="form-group">
                     <label for="exampleInputEmail1">Email address</label>
                     <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                 </div>

                 <div class="form-group">
                     <label for="exampleInputPassword1">Linkedin</label>
                     <input type="url" class="form-control" id="exampleInputPassword1" placeholder="Enter your Linkedin">
                 </div>

                <div class="form-group">
                   <label for="exampleInputPassword1">Linkedin</label>
                   <input type="url" class="form-control" id="exampleInputPassword1" placeholder="Enter your Linkedin">
                </div>



            
             </div>
              <div class="form-group">
                 <input id="newCompanyName" type="text" class="form-control my-2 " placeholder="Enter Company Name">
                 <input id="newProfileURL" type="text" class="form-control my-2" placeholder="Enter Profile URL">
                 <button  class="btn btn-primary" id="addNewCompany" type="button">
                     Add 
                 </button>
                
             </div>

                 <div class="form-group">
                     <label for="exampleInputFile">File input</label>
                     <div class="input-group">
                         <div class="custom-file">
                             <input type="file" class="custom-file-input" id="exampleInputFile">
                             <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                         </div>

                         <div class="input-group-append">
                             <span class="input-group-text">Upload</span>
                         </div>



                     </div>
                 </div>


             <!-- /.card-body -->

             <div class="card-footer">
                 <button type="submit" class="btn btn-primary">Submit</button>
             </div>

         </div>
     </div>
     <script>
      const addNewCompany = document.querySelector("#addNewCompany");
const newCompanyName = document.querySelector("#newCompanyName");
const newProfileURL = document.querySelector("#newProfileURL");
const allCompanies = document.querySelector("#allCompanies");
// event listener for adding new company
function appendComponent(company, url) {
    const div = document.createElement("div");

    const component = `
     <div class="form-group">
                     <label for="exampleInputPassword1">${company}</label>
                     <input type="url" class="form-control" value="${url}" id="exampleInputPassword1">
                 </div>
    `;
    div.innerHTML = component;

    allCompanies.appendChild(div);
}
addNewCompany.addEventListener("click", (e) => {
    const companyName = newCompanyName.value;
    const ProfileURL = newProfileURL.value;
    appendComponent(companyName, ProfileURL);
   newCompanyName.value="";
   newProfileURL.value="";
    e.preventDefault();
});

     </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection

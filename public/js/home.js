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
    console.log(newCompanyName.value);
    console.log(newProfileURL.value);
    e.preventDefault();
});

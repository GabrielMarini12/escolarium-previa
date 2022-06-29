const frm = document.querySelector("form");
frm.addEventListener("submit", (e) => {
    e.preventDefault();
    submitForm();
});

function submitForm(){
    const name = frm.name.value;
    const gender = frm.gender.value;
    const autor = frm.autor.value;
    const year = frm.year.value;

    if (isNaN(year) || (name == "") || (gender == "") || (autor == "") ) {
      alert("Preencha os dados corretamente!");
    } else {
        console.log(name, gender, autor, year);
        frm.submit();
    }


}
function showPage(pageId){

    document.querySelectorAll(".page")
    .forEach(p => p.classList.remove("active"));

    document.getElementById(pageId).classList.add("active");
}


// LOAD
function loadMatches(){
    fetch("get_matches.php")
    .then(r => r.text())
    .then(data => {
        document.getElementById("matchesTable").innerHTML = data;
    });
}

function loadStats(){
    fetch("get_stats.php")
    .then(r => r.text())
    .then(data => {
        document.getElementById("statsBox").innerHTML = data;
    });
}


// SUBMIT (ADD + UPDATE)
document.getElementById("matchForm").addEventListener("submit", function(e){

    e.preventDefault();

    let formData = new FormData(this);

    let id = document.getElementById("matchId").value;

    let url = (id === "") ? "add_match.php" : "update_match.php";

    fetch(url, {
        method: "POST",
        body: formData
    }).then(() => {

        this.reset();
        document.getElementById("matchId").value = "";

        loadMatches();
        loadStats();
    });

});


// DELETE
function deleteMatch(id){

    if(confirm("Obrisati utakmicu?")){

        fetch("delete_match.php?id=" + id)
        .then(() => {
            loadMatches();
            loadStats();
        });
    }
}


// EDIT
function editMatch(id, protivnik, datum, uzice, protivnikGolovi){

    document.getElementById("matchId").value = id;
    document.querySelector("[name='protivnik']").value = protivnik;
    document.querySelector("[name='datum']").value = datum;
    document.querySelector("[name='uzice']").value = uzice;
    document.querySelector("[name='protivnikGolovi']").value = protivnikGolovi;

    showPage("odigrano"); 
}


// INIT
loadMatches();
loadStats();
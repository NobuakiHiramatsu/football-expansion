const favorite_id = js_team.team_id;
console.log(favorite_id);

$.ajaxSetup({
    headers: {"X-Auth-Token" : "eaae072bd063418faf49f948b81a3902"}
});

$.getJSON(`https://api.football-data.org/v2/teams/${favorite_id}/`, function(data_ft){
    let team_name = data_ft.name;
    console.log(team_name);

    $(".your_team").append(
        `<img src="https://crests.football-data.org/${data_ft.id}.svg" height="30" >${team_name}`
    )
});
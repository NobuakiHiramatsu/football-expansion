const favorite_id = js_favorite.team_id;
console.log(favorite_id);

$.ajaxSetup({
    headers: {"X-Auth-Token" : "eaae072bd063418faf49f948b81a3902"}
});

$.getJSON(`https://api.football-data.org/v2/teams/${favorite_id}/`, function(data_ft){
    let team_name = data_ft.name;
    console.log(team_name);

    $(".your_team").append(
        `<p>あなたのお気に入りチーム:<img src="https://crests.football-data.org/${data_ft.id}.svg" height="30" >${team_name}</p>`
    )
});

$.getJSON(`https://api.football-data.org/v2/teams/${favorite_id}/matches`, function(data_fv){
    let team_data = data_fv.matches;
    console.log(team_data);

    //直近10試合のリーグ戦結果を表示
    let match_results = $.grep(team_data, (item) => {
        return item.status == "FINISHED";
    });

    match_results = match_results.reverse();//最新試合を上部表示
    //console.log(match_results);
    //表示処理
    for(var i=0;i<10;i++){
        let date, jdate; //試合の日時のための変数を宣言（試合日と時間）
        let jtime = "";  //dateから時間だけを取得する用

        date = new Date(match_results[i].utcDate);
        date = date.toLocaleString("ja-JP");
        jdate = new Date(date);
        jtime = (jdate.getHours() + ':' + ("0" + jdate.getMinutes()).slice(-2));
        //console.log(jtime);
      
        $(".fv_result").append(
                `<tr>
                    <td class="text-center">${jdate.getMonth() + 1}/${jdate.getDate()}<br>${jtime}</td>
                    <td class="text-center">${match_results[i].competition.name}</td>
                    <td class="text-center"><img src="https://crests.football-data.org/${match_results[i].homeTeam.id}.svg" height="30" ><br>${match_results[i].homeTeam.name}</td>
                    <td class="text-center">${match_results[i].score.fullTime.homeTeam} - ${match_results[i].score.fullTime.awayTeam}</td>
                    <td class="text-center"><img src="https://crests.football-data.org/${match_results[i].awayTeam.id}.svg" height="30" ><br>${match_results[i].awayTeam.name}</td>
                </tr>`
        );
    }

    //直近10試合の試合日程表示
    let match_schedules = $.grep(team_data, (item) => {
        return item.status == "SCHEDULED";
    });
    //onsole.log(match_schedules);

    for(var i=0;i<10;i++){
        let date, jdate; //試合の日時のための変数を宣言（試合日と時間）
        let jtime = "";  //dateから時間だけを取得する用

        date = new Date(match_schedules[i].utcDate);
        date = date.toLocaleString("ja-JP");
        jdate = new Date(date);
        jtime = (jdate.getHours() + ':' + ("0" + jdate.getMinutes()).slice(-2));
        //console.log(jtime);
      
        $(".fv_schedule").append(
                `<tr>
                    <td class="text-center">${match_schedules[i].competition.name}</td>
                    <td class="text-center"><img src="https://crests.football-data.org/${match_schedules[i].homeTeam.id}.svg" height="30" ><br>${match_schedules[i].homeTeam.name}</td>
                    <td class="text-center">${jdate.getMonth() + 1}/${jdate.getDate()}<br>${jtime}</td>
                    <td class="text-center"><img src="https://crests.football-data.org/${match_schedules[i].awayTeam.id}.svg" height="30" ><br>${match_schedules[i].awayTeam.name}</td>
                </tr>`
        );
    }
});
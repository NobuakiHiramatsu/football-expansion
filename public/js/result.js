$(function() {
    $.ajaxSetup({
        headers: {"X-Auth-Token" : "eaae072bd063418faf49f948b81a3902"}
    });

    $.getJSON('https://api.football-data.org/v2/competitions/PL/standings?standingType=TOTAL', function(data_PL){
        //JSON取得後の処理
        standings = data_PL.standings[0].table    

        //順位表にデータをデータを入れる
        standings.forEach(function(standing){
            $(".PL_table").append(
                `<tr>
                <td class="text-center">${standing.position}</td>
                <td class="text-center"><img src="${standing.team.crestUrl}" height="24"></td>
                <td class="text-left">${standing.team.name}</td> 
                <td class="text-center">${standing.playedGames}</td>
                <td class="text-center">${standing.won}</td>
                <td class="text-center">${standing.draw}</td>
                <td class="text-center">${standing.lost}</td>
                <td class="text-center">${standing.points}</td>
                </tr>`
            )
        });
    });

    $.getJSON('https://api.football-data.org/v2/competitions/PD/standings?standingType=TOTAL', function(data_PD){
        //JSON取得後の処理
        standings = data_PD.standings[0].table    

        //順位表にデータをデータを入れる
        standings.forEach(function(standing){
            $(".PD_table").append(
                `<tr>
                <td class="text-center">${standing.position}</td>
                <td class="text-center"><img src="${standing.team.crestUrl}" height="24"></td>
                <td class="text-left">${standing.team.name}</td> 
                <td class="text-center">${standing.playedGames}</td>
                <td class="text-center">${standing.won}</td>
                <td class="text-center">${standing.draw}</td>
                <td class="text-center">${standing.lost}</td>
                <td class="text-center">${standing.points}</td>
                </tr>`
            )
        });
    });

    $.getJSON('https://api.football-data.org/v2/competitions/SA/standings?standingType=TOTAL', function(data_SA){
        //JSON取得後の処理
        standings = data_SA.standings[0].table    

        //順位表にデータをデータを入れる
        standings.forEach(function(standing){
            $(".SA_table").append(
                `<tr>
                <td class="text-center">${standing.position}</td>
                <td class="text-center"><img src="${standing.team.crestUrl}" height="24"></td>
                <td class="text-left">${standing.team.name}</td> 
                <td class="text-center">${standing.playedGames}</td>
                <td class="text-center">${standing.won}</td>
                <td class="text-center">${standing.draw}</td>
                <td class="text-center">${standing.lost}</td>
                <td class="text-center">${standing.points}</td>
                </tr>`
            )
        });
    });
});
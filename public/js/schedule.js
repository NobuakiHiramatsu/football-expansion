//1節から38節までの表示
let numbers = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38];

for(let i = 0; i < numbers.length; i++){

    //プレミアリーグの枠組み表示
    $(".PL_setsu").append(
        `<li class="nav-item"><a href="#PLmatch${numbers[i]}" class="nav-link setsu" data-toggle="tab">PL${numbers[i]}節</a></li>`
    )
    $(".PLmatches").append(
        `<div id="PLmatch${numbers[i]}" class="tab-pane">
            <table class="table">
                <tr>
                    <th class="text-center">ホーム</th>
                    <th class="text-center">時間</th>
                    <th class="text-center">アウェイ</th>
                </tr>
                <tbody class="PL_table${numbers[i]}">

                </tbody>
            </table>
        </div>`
    )
    
    //ラ・リーガの枠組み表示
    $(".PD_setsu").append(
        `<li class="nav-item"><a href="#PDmatch${numbers[i]}" class="nav-link setsu" data-toggle="tab">PD${numbers[i]}節</a></li>`
    )
    $(".PDmatches").append(
        `<div id="PDmatch${numbers[i]}" class="tab-pane">
            <table class="table">
                <tr>
                    <th class="text-center">ホーム</th>
                    <th class="text-center">時間</th>
                    <th class="text-center">アウェイ</th>
                </tr>
                <tbody class="PD_table${numbers[i]}">

                </tbody>
            </table>
        </div>`
    )
    
    //セリエAの枠組み表示
    $(".SA_setsu").append(
        `<li class="nav-item"><a href="#SAmatch${numbers[i]}" class="nav-link setsu" data-toggle="tab">SA${numbers[i]}節</a></li>`
    )
    $(".SAmatches").append(
        `<div id="SAmatch${numbers[i]}" class="tab-pane">
            <table class="table">
                <tr>
                    <th class="text-center">ホーム</th>
                    <th class="text-center">時間</th>
                    <th class="text-center">アウェイ</th>
                </tr>
                <tbody class="SA_table${numbers[i]}">

                </tbody>
            </table>
        </div>`
    )
}

//プレミアリーグの表示
$("#PL_click").click(function(){
    $(function(){
        $.ajaxSetup({
            headers:{"X-Auth-Token" : "eaae072bd063418faf49f948b81a3902"}
        })
        let numbers = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38];
        //console.log(numbers);
          
        $.getJSON(`https://api.football-data.org/v2/competitions/PL/matches?`, function(data_PL){ 
            //デフォルトで今節表示（currentMatchday取得し、activeクラス付与）、そして左よせ
            let cmd = data_PL.matches[0]; 
            //console.log(cmd);
            let Cmd = cmd.season.currentMatchday;
            //console.log(Cmd);

            Cmd = '#PLmatch' + Cmd;
            //console.log(Cmd);
            $(`a[href="${Cmd}"]`).addClass("active");
            $(Cmd).addClass("active");

            //activeになったタブを画面中央に持ってくる
            $(function(){
                let w_width = $(window).width();
                console.log(w_width);
                let tab = $(`a[href="${Cmd}"]`).parent().offset();
                tab = tab.left;
                console.log(tab);

                let dftab = $(`a[href="${Cmd}"]`).parent().parent();
                
                dftab.scrollLeft(tab - w_width/2); 
            })

            
            
            

            //試合日程表示の処理
            for(let x = 0; x < numbers.length; x++){
                let game_list = data_PL.matches; //全試合データを取得
                //この中からmatchday= 1〜38 に当てはまるものをそれぞれ取得する
                let matchID = numbers[x];
                let target = game_list.filter(function(object){
                    //matchdayがnumber[x]と同値のオブジェクトのみ所得
                    return object.matchday === numbers[x];
                })
                //console.log(target);

                let youbi = ["日", "月", "火", "水", "木", "金", "土"];
                let date, jdate; //試合の日時のための変数を宣言（試合日と時間）
                let jtime = "";  //dateから時間だけを取得する用

                let id = `PL_table${numbers[x]}`;
                //console.log(id);
                
                for(let i = 0; i < 10; i++){
                    //日時を日本時間に変更
                    date = new Date(target[i].utcDate);
                    date = date.toLocaleString("ja-JP");
                    jdate = new Date(date);
                    jtime = (jdate.getHours() + ':' + ("0" + jdate.getMinutes()).slice(-2));

                    //日程表にデータを挿入
                    
                    $(`.${id}`).append(
                        `<tr>
                            <td class="text-center"><img src="https://crests.football-data.org/${target[i].homeTeam.id}.svg" height="30" ><br>${target[i].homeTeam.name}</td>
                            <td class="${game_list[i].td_class} text-center">${jdate.getMonth() + 1}/${jdate.getDate()}(${youbi[jdate.getDay()]})<br>${jtime}</td>
                            <td class="text-center"><img src="https://crests.football-data.org/${target[i].awayTeam.id}.svg" height="30"><br>${target[i].awayTeam.name}</td>
                        </tr>`
                    );
                }
            }
        });
    });
});

//ラ・リーガの表示
$("#PD_click").click(function(){
    $(function(){
        $.ajaxSetup({
            headers:{"X-Auth-Token" : "eaae072bd063418faf49f948b81a3902"}
        })
        let numbers = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38];
        //console.log(numbers);
          
        $.getJSON(`https://api.football-data.org/v2/competitions/PD/matches?`, function(data_PD){ 
            //デフォルトで今節表示（currentMatchday取得し、activeクラス付与）、そして左よせ
            let cmd = data_PD.matches[0]; 
            //console.log(cmd);
            let Cmd = cmd.season.currentMatchday;
            //console.log(Cmd);

            Cmd = '#PDmatch' + Cmd;
            console.log(Cmd);
            $(`a[href="${Cmd}"]`).addClass("active");
            $(Cmd).addClass("active");

            //activeになったタブを画面中央に持ってくる
            $(function(){
                let w_width = $(window).width();
                console.log(w_width);
                let tab = $(`a[href="${Cmd}"]`).parent().offset();
                tab = tab.left;
                console.log(tab);

                let dftab = $(`a[href="${Cmd}"]`).parent().parent();
                
                dftab.scrollLeft(tab - w_width/2); 
            })

            //試合日程表示の処理
            for(let x = 0; x < numbers.length; x++){
                let game_list = data_PD.matches; //全試合データを取得
                //この中からmatchday= 1〜38 に当てはまるものをそれぞれ取得する
                let matchID = numbers[x];
                let target = game_list.filter(function(object){
                    //matchdayがnumber[x]と同値のオブジェクトのみ所得
                    return object.matchday === numbers[x];
                })
                //console.log(target);

                let youbi = ["日", "月", "火", "水", "木", "金", "土"];
                let date, jdate; //試合の日時のための変数を宣言（試合日と時間）
                let jtime = "";  //dateから時間だけを取得する用

                let id = `PD_table${numbers[x]}`;
                //console.log(id);
                
                for(let i = 0; i < 10; i++){
                    //日時を日本時間に変更
                    date = new Date(target[i].utcDate);
                    date = date.toLocaleString("ja-JP");
                    jdate = new Date(date);
                    jtime = (jdate.getHours() + ':' + ("0" + jdate.getMinutes()).slice(-2));

                    //日程表にデータを挿入
                    
                    $(`.${id}`).append(
                        `<tr>
                            <td class="text-center"><img src="https://crests.football-data.org/${target[i].homeTeam.id}.svg" height="30" ><br>${target[i].homeTeam.name}</td>
                            <td class="${target[i].td_class} text-center">${jdate.getMonth() + 1}/${jdate.getDate()}(${youbi[jdate.getDay()]})<br>${jtime}</td>
                            <td class="text-center"><img src="https://crests.football-data.org/${target[i].awayTeam.id}.svg" height="30"><br>${target[i].awayTeam.name}</td>
                        </tr>`
                    );
                }
            }
        });
    });
});

//セリエAの表示
$("#SA_click").click(function(){
    $(function(){
        $.ajaxSetup({
            headers:{"X-Auth-Token" : "eaae072bd063418faf49f948b81a3902"}
        })
        let numbers = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38];
        //console.log(numbers);
          
        $.getJSON(`https://api.football-data.org/v2/competitions/SA/matches?`, function(data_SA){ 
            //デフォルトで今節表示（currentMatchday取得し、activeクラス付与）、そして左よせ
            let cmd = data_SA.matches[0]; 
            //console.log(cmd);
            let Cmd = cmd.season.currentMatchday;
            //console.log(Cmd);

            Cmd = '#SAmatch' + Cmd;
            console.log(Cmd);
            $(`a[href="${Cmd}"]`).addClass("active");
            $(Cmd).addClass("active");

            //activeになったタブを画面中央に持ってくる
            $(function(){
                let w_width = $(window).width();
                console.log(w_width);
                let tab = $(`a[href="${Cmd}"]`).parent().offset();
                tab = tab.left;
                console.log(tab);

                let dftab = $(`a[href="${Cmd}"]`).parent().parent();
                
                dftab.scrollLeft(tab - w_width/2); 
            })

            //試合日程表示の処理
            for(let x = 0; x < numbers.length; x++){
                let game_list = data_SA.matches; //全試合データを取得
                //この中からmatchday= 1〜38 に当てはまるものをそれぞれ取得する
                let matchID = numbers[x];
                let target = game_list.filter(function(object){
                    //matchdayがnumber[x]と同値のオブジェクトのみ所得
                    return object.matchday === numbers[x];
                })
                //console.log(target);

                let youbi = ["日", "月", "火", "水", "木", "金", "土"];
                let date, jdate; //試合の日時のための変数を宣言（試合日と時間）
                let jtime = "";  //dateから時間だけを取得する用

                let id = `SA_table${numbers[x]}`;
                //console.log(id);
                
                for(let i = 0; i < 10; i++){
                    //日時を日本時間に変更
                    date = new Date(target[i].utcDate);
                    date = date.toLocaleString("ja-JP");
                    jdate = new Date(date);
                    jtime = (jdate.getHours() + ':' + ("0" + jdate.getMinutes()).slice(-2));

                    //日程表にデータを挿入
                    
                    $(`.${id}`).append(
                        `<tr>
                            <td class="text-center"><img src="https://crests.football-data.org/${target[i].homeTeam.id}.svg" height="30" ><br>${target[i].homeTeam.name}</td>
                            <td class="${target[i].td_class} text-center">${jdate.getMonth() + 1}/${jdate.getDate()}(${youbi[jdate.getDay()]})<br>${jtime}</td>
                            <td class="text-center"><img src="https://crests.football-data.org/${target[i].awayTeam.id}.svg" height="30"><br>${target[i].awayTeam.name}</td>
                        </tr>`
                    );
                }
            }
        });
    });
});
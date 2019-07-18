var main = {
    init: function(){
        console.log(`[init]`);

        let server_status_url = `proxy.php?u=info`;
        let players_list_url = `proxy.php?u=players`;

        this.get_server_status(server_status_url);
        this.get_players_list(players_list_url);
    },
    get_server_status: function(server_status_url){
        fetch(
            server_status_url,
            {
                method: 'get', // GET, POST
                headers: {
                    'content-type': 'application/json'
                },
                cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
                mode: 'cors', // no-cors, cors, *same-origin
            }
        ).then((response) => {
            return response.json();
        }).then((myJson) => {
            console.log(myJson);

            document.getElementById("server_icon").setAttribute('src', 'data:image/png;base64,' + myJson.icon);
            document.getElementById("server").innerText = `Version: ${myJson.server}`;

            document.getElementById('sv_maxClients').innerText = `Max Clients: ${myJson.vars.sv_maxClients}`;
            document.getElementById('banner_connecting').innerText = `banner_connecting: ${myJson.vars.banner_connecting}`;
            document.getElementById('banner_detail').innerText = `banner_detail: ${myJson.vars.banner_detail}`;
            document.getElementById('onesync_enabled').innerText = `onesync_enabled: ${myJson.vars.onesync_enabled}`;
            document.getElementById('sv_enhancedHostSupport').innerText = `sv_enhancedHostSupport: ${myJson.vars.sv_enhancedHostSupport}`;
            document.getElementById('sv_lan').innerText = `sv_lan: ${myJson.vars.sv_lan}`;
            //document.getElementById('sv_licenseKeyToken').innerText = `sv_licenseKeyToken: ${myJson.vars.sv_licenseKeyToken}`;
            document.getElementById('sv_scriptHookAllowed').innerText = `sv_scriptHookAllowed: ${myJson.vars.sv_scriptHookAllowed}`;
            document.getElementById('tags').innerText = `tags: ${myJson.vars.tags}`;
            document.getElementById('txAdmin_version').innerText = `txAdmin-version: ${myJson.vars['txAdmin-version']}`;
        });
    },
    get_players_list: function(players_list_url){
        fetch(
            players_list_url,
            {
                method: 'get', // GET, POST
                headers: {
                    'content-type': 'application/json'
                },
                cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
                mode: 'cors', // no-cors, cors, *same-origin
            }
        ).then((response) => {
            return response.json();
        }).then((myJson) => {
            console.log(myJson);

            document.getElementById('players_count').innerText = `online players: ${myJson.length}`;

            let ele_players = document.getElementById('players');
            let ele_ul = document.createElement('ul');
            ele_players.appendChild(ele_ul);

            myJson.forEach((element, index) => {
                console.log(element);

                let ele_li = document.createElement('li');
                ele_li.innerText = `${element.name}, (ping: ${element.ping})`;

                ele_ul.appendChild(ele_li);
            });
            
        });
    }
};

(function(){
    main.init();
})();
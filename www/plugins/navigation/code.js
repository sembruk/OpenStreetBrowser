var navigation_toolbox;

function navigation_set_home(pos) {
}

function navigation_set_destination(pos) {
}

function navigation_init() {
  navigation_toolbox=new toolbox({
    icon: "plugins/navigation/icon.png",
    icon_title: "navigation",
    weight: -3,
  });
  register_toolbox(navigation_toolbox);

  if(plugins_loaded("contextmenu")) {
    contextmenu_add("plugins/navigation/home.png", lang("navigation:set_home"), navigation_set_home);
    contextmenu_add("plugins/navigation/destination.png", lang("navigation:set_destination"), navigation_set_destination);
  }

  var text = "<i>Navigation</i><br/><br/>At first select your home and your destination on the map.<br/><br/><img src='plugins/navigation/home.png'> home<br/><img src='plugins/navigation/destination.png'> destination<br/><br/>";
  navigation_toolbox.content.innerHTML=text;
}

function navigation_info(chapters, ob) {
  if(ob.geo_center()) {
    // set home
    var a=document.createElement("a");
    a.onclick=navigation_set_home.bind(this, ob.geo_center());
    dom_create_append_text(a, lang("navigation:set_home"));

    var entry={
      head: 'actions',
      weight: 9,
      content: [ a ]
    };

    chapters.push(entry);

    // set destination
    var a=document.createElement("a");
    a.onclick=navigation_set_destination.bind(this, ob.geo_center());
    dom_create_append_text(a, lang("navigation:set_destination"));

    var entry={
      head: 'actions',
      weight: 9,
      content: [ a ]
    };

    chapters.push(entry);
  }
}

register_hook("init", navigation_init);
register_hook("info", navigation_info);

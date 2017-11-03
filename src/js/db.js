var $ = require("jquery");

module.exports = {
    load_all: function()
    {
        var posts;
        $.ajaxSetup({ cache: false });
        $.get('./data/posts.txt', function(data)
        {
            app.loaded = "hz";
        });
        return posts;
    }
}

//module.exports = {
//    load_posts: function(arg, option=false) {
//        $.ajaxSetup({ cache: false });
//        $.get('./data/posts.txt', function(data)
//        {
//            if ( arg == "all" )
//                {
//                    return data;
//                }
//            else {
//                return "nah";
//            }
//        });
//    }
//}
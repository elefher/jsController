jQuery.extend({
    Controller: function(model, view) {
        /**
         * listen to the view
         */
        var vlist = $.ViewListener({
            loadAllClicked: function() {
                var all = model.getAll();
                if (all)
                    view.message("from cache: " + all.length + " items");
                $.each(all, function(i) {
                    view.message("from cache: " + all[i].name);
                });
            },
            loadOneClicked: function() {
                var d = model.getItem(1);
                if (d)
                    view.message("from cache: " + d.name);
            },
            clearAllClicked: function() {
                view.message("clearing data");
                model.clearAll();
            },
            loadShowupForm: function() {
                var form = model.getForm();
                if (form) {
                    $.each(form, function(i) {
                        view.form(form[i]/*[i].name*/);
                    });
                } else {     
                    //console.log('else');
                    /*$.each(form, function(i) {
                        console.log('else');
                        view.form(form[i]/*[i].name);
                    });*/
                }
            }
        });
        view.addListener(vlist);

        /**
         * listen to the model
         */
        var mlist = $.ModelListener({
            loadBegin: function() {
                view.message("Fetching Data...");
            },
            loadFail: function() {
                view.message("ajax error");
            },
            loadFinish: function() {
                view.message("Done.");
            },
            loadItem: function(item) {
                view.message("from ajax: " + item.name);
            }
        });
        model.addListener(mlist);
    }

});

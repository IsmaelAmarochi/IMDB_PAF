!function(a){form={form:null,formItem:null,inputField:null,textarea:null,init:function(s){this.form=a(s);var e=this;this.onInput(),this.onBlur(),a(document).ajaxComplete(function(t,i,n){e.form=a(s),e.onInput(),e.onBlur()})},onInput:function(){this.formItem=this.form.find(".form-item"),this.inputField=this.formItem.find("input"),this.textarea=this.formItem.find("textarea"),this.form.find("input").on("input",function(){a(this).parent().addClass("is-active")}),this.form.find("textarea").on("input",function(){a(this).parents(".form-item").addClass("is-active")}),this.form.find("input").each(function(){a(this).val()&&(a(this).siblings("label").css("transition","none"),a(this).parent().addClass("is-active"))}),this.form.find("textarea").each(function(){a(this).val()&&(a(this).parents(".form-item").children("label").css("transition","none"),a(this).parents(".form-item").addClass("is-active"))})},onFocus:function(){this.formItem=this.form.find(".form-item"),this.inputField=this.formItem.find("input"),this.textarea=this.formItem.find("textarea"),this.form.find("input").on("focus",function(){a(this).parent().addClass("active")}),this.form.find("textarea").on("focus",function(){a(this).parents(".form-item").addClass("active")}),this.form.find("input").each(function(){a(this).val()&&(a(this).siblings("label").css("transition","none"),a(this).parent().addClass("active"))}),this.form.find("textarea").each(function(){a(this).val()&&(a(this).parents(".form-item").children("label").css("transition","none"),a(this).parents(".form-item").addClass("active"))})},onBlur:function(){this.formItem=this.form.find(".form-item"),this.inputField=this.formItem.find("input"),this.textarea=this.formItem.find("textarea"),this.form.find("input").on("blur",function(){a(this).val()||a(this).parent().removeClass("active")}),this.form.find("textarea").on("blur",function(){a(this).val()||a(this).parents(".form-item").removeClass("active")})}}}(jQuery);
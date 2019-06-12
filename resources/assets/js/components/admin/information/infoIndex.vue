<template>
    <div>

        <div class="panel panel-default">
            <div class="panel-heading">Контактное лицо</div>
            <div class="panel-body">
                <form v-on:submit="saveForm('contact')">
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Имя фамилия контактного лица</label>
                            <input type="text" v-model="info.username" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Должность</label>
                            <input type="text" v-model="info.position" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Почта</label>
                            <input type="text" v-model="info.mail" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <button class="btn btn-success">Сохранить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Ссылки</div>
            <div class="panel-body">
                <form v-on:submit="saveForm('links')">
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Facebook</label>
                            <input type="text" v-model="info.facebook" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Instagram</label>
                            <input type="text" v-model="info.instagram" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Artdealer</label>
                            <input type="text" v-model="info.artdealer" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <button class="btn btn-success">Сохранить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">О художнике</div>
            <div class="panel-body">
                <form v-on:submit="saveForm('author')">
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Заголовок</label>
                            <input type="text" v-model="info.infoTitle" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Основной текст</label>
                            <textarea  v-model="info.infoDecription" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <button class="btn btn-success">Сохранить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
  export default {
    mounted() {
      let app = this;

      axios.get('/api/v1/information/')
        .then(function (responce) {
          // console.log(responce);
          //app.company = responce.data;
        })
        .catch(function () {
          alert("Field user_ifo is empty")
        });
    },
    data: function () {
      return {
        info: {
          username: '',
          position: '',
          mail: '',
          facebook: '',
          instagram: '',
          artdealer: '',
          infoTitle: '',
          infoDecription: '',
          saveBtn: ''
        }
      }
    },
    methods: {
      saveForm(btnId) {
        event.preventDefault();
        var app = this;
        app.info.saveBtn = btnId;
        var newInfo = app.info;
        axios.post('/api/v1/information/save', newInfo)
          .then(function (responce) {
            console.log(responce)
            // app.$router.replace('/');
          })
          .catch(function (responce) {
            console.log(responce);
            alert("Could not save data");
          });
      }
    }
  }
</script>
<!DOCTYPE html>
<html lang="trww">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="icon" href="<%= BASE_URL %>favicon.ico">
  <title>
    <%= htmlWebpackPlugin.options.title %>
  </title>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>

  <!-- <div id="app"></div> -->


    <div class="container" id="fetchAlldiv">
      <br />
      <h3 align="center">Vue.js PHP fetchAll Data from Mysql Database</h3>
      <br />
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="row">
            <h3 class="panel-title"> Employee Records</h3>
          </div>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
              <tr v-for="row in allData">
                <td>{{ row.name }}</td>
                <td>{{ row.password }}</td>
                <td>{{ row.active }}</td>
                <td><button type="button" name="edit" class="btn btn-primary btn-xs edit">Edit</button></td>
                <td><button type="button" name="delete" class="btn btn-danger btn-xs delete">Delete</button></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
</body>

</html>

  <script>
    var application = new Vue({
      el:'#fetchAlldiv',
          data:{
            allData:'',
      },
      methods:{
          fetchAllData:function(){ //show records
            axios.post('fetchall.php', {
              action:'fetchall'
            }).then(function(response){
              application.allData = response.data;
            });
          }
      }, 
      created:function(){
        this.fetchAllData();
      }
  });
</script>
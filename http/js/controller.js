angular.module("MyFirstApp", [])
.controller("FirtsController", function($scope,$http){
    $scope.posts = [];
    $scope.newPost = {};
    $http.get("https://jsonplaceholder.typicode.com/posts")
    .then(function(data){
        console.log(data.data);
        $scope.posts = data.data;
    })
    .then(function(err){
        console.log(err);
    });
    $scope.addPost = function(){
        $http.post("https://jsonplaceholder.typicode.com/posts",{
            title: $scope.newPost.title,
            body: $scope.newPost.body,
            userId: 1
        })
        .then(function(data,status,headers,config){
            $scope.posts.push($scope.newPost);
            $scope.addPost = {};

        })
        .then(function(error,data,status,headers,config){
            console.log(error);
        });
    }
});

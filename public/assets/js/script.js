// $(function(){

//     $.ajaxSetup({
//         headers: {
//               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//           }
//       });

//     $('#editUser').on('click', function() {
//         $('.modal-ubah-title').html('Form Ubah User');
//         const id = $(this).data('id');
//         console.log(id);

//         $.ajax({
//             url: "http://127.0.0.1:8000/admin/user/edit_user",
//             data: {id : id},
//             method: 'post',
//             success: function(data){
//                 console.log(data);
//             }
//         })
//     });
// });
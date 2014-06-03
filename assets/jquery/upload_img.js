

    $(document).ready(function ()
    {
      $('.fileUpload').liteUploader(
      {
        script: 'model/admin/upload.php',
        allowedFileTypes: 'image/jpeg,image/png,image/gif',
        maxSizeInBytes: 5000000,
        customParams: {
          'custom': 'tester'
        },
        before: function (files)
        {
          $('#details, #previews').empty();
          $('#response').html('Uploading ' + files.length + ' file(s)...');
        },
        each: function (file, errors)
        {
          var i, errorsDisp = '';

          if (errors.length > 0)
          {
            $('#response').html('One or more files did not pass validation');

            $.each(errors, function(i, error)
            {
              errorsDisp += '<br/><span class="error">' + error.type + ' error - Rule: ' + error.rule + '</span>';
            });
          }

         $('#details').append('<p>name: ' + file.name + ', type: ' + file.type + ', size:' + file.size + errorsDisp + '</p>');
          //$('#input').append('<input type="text" name="photo" id="photo" value="'+ file.name + '">');
          $('#photo').val('images/uploads/'+ file.name);
          //$('#previews').append('<img src="images/uploads/'+file.name+'">');
        },
        success: function (response)
        {
          var response = $.parseJSON(response);

          $.each(response.urls, function(i, url)
          {
           // $('#previews').append('<img src="images/uploads/'+file.name+'">');
            $('#previews').append($('<img>', {'src': 'images/uploads/'+url, 'width': 200}));
          });

          $('#response').html(response.message);
        }
      });
    });


@extends('backend.layouts.app')
@section('content')
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
        <h1>Advanced Form</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Advanced Form</li>
        </ol>
    </div>
    </div>
    </div><!-- /.container-fluid -->
</section>


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Add Sertification
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <form action="{{ route('sertification.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="company_name">Company Name</label>
                                    <input type="text" class="form-control" name="company_name" value="{{ old('company_name') }}" placeholder="Company Name">
                                    @error('company_name')
                                        <small class="text-danger">Kesalahan nama company</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="id_sertification">ID Sertification</label>
                                    <input type="text" value="{{ old('id_sertification') }}" class="form-control" name="id_sertification" placeholder="ID Sertification">
                                    @error('id_sertification')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea name="address" id="" cols="30" rows="5" class="form-control" placeholder="Address">{{ old('address') }}</textarea>
                                    @error('address')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="standard">Standard</label>
                                    <input type="text" value="{{ old('standard') }}" class="form-control" name="standard" placeholder="Masukan standard">
                                    @error('standard')
                                        <small class="text-danger">Kesalahan nama company</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="submit">Submit</label>
                                    <input type="text" class="form-control" value="{{ old('submit') }}" placeholder="Input Submit" name="submit">
                                    @error('submit')
                                        <small class="text-danger">Kesalahan nama company</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="survailance1">Survailance 1</label>
                                    <input type="text" class="form-control" value="{{ old('survailance1') }}" placeholder="Input survailance 1" name="survailance1">
                                    @error('survailance1')
                                        <small class="text-danger">Kesalahan nama company</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="survailance2">Survailance 2</label>
                                    <input type="text" value="{{ old('survailance2') }}" class="form-control" placeholder="Input Survailance" name="survailance2">
                                    @error('survailance2')
                                        <small class="text-danger">Kesalahan nama company</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Expire Date</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input value="{{ old('expire_date') }}" name="expire_date" type="text" placeholder="Select Expire Date" class="form-control datetimepicker-input" data-target="#reservationdate">
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                    @error('company_name')
                                        <small class="text-danger">Kesalahan nama company</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary"><i class="fa fa-save mr-1"></i>Simpan Sertifikasi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')
<script src="{{ asset('backend') }}/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{ asset('backend') }}/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="{{ asset('backend') }}/plugins/moment/moment.min.js"></script>
<script src="{{ asset('backend') }}/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="{{ asset('backend') }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('backend') }}/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('backend') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="{{ asset('backend') }}/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date range picker
      $('#reservationdate').datetimepicker({
          format: 'L'
      });
      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
          format: 'MM/DD/YYYY hh:mm A'
        }
      })
      //Date range as a button
      $('#daterange-btn').daterangepicker(
        {
          ranges   : {
            'Today'       : [moment(), moment()],
            'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month'  : [moment().startOf('month'), moment().endOf('month')],
            'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate  : moment()
        },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )

      //Timepicker
      $('#timepicker').datetimepicker({
        format: 'LT'
      })

      //Bootstrap Duallistbox
      $('.duallistbox').bootstrapDualListbox()

      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()

      $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
      });

      $("input[data-bootstrap-switch]").each(function(){
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
      });

    })
  </script>
@endsection

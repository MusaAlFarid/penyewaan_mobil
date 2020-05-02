<div class="kt-grid__item   kt-portlet kt-todo__aside" id="kt_todo_aside">
    <div class="kt-todo__nav">
        <ul class="kt-nav">
            <li class="kt-nav__item kt-margin-t-20 kt-margin-b-20">
                <span class="kt-nav__link-title">Menu Utama</span>
            </li>
            <li class="kt-nav__item active">
            <a href="{{route('dashboard')}}" class="kt-nav__link" data-action="list" data-type="trash">
                    <i class="kt-nav__link-icon kt-nav__link-icon--size fa fa-home"></i>
                    <span class="kt-nav__link-text">Dashboard</span>
                </a>
            </li>
    
            <li class="kt-nav__item kt-margin-t-20 kt-margin-b-20">
                <span class="kt-nav__link-title">Mobil</span>
            </li>
        
            <li class="kt-nav__item">
            <a href="{{route('car.index')}}" class="kt-nav__link" data-action="list" data-type="trash">
                    <i class="kt-nav__link-icon kt-nav__link-icon--size fa fa-car"></i>
                    <span class="kt-nav__link-text">Data Mobil</span>
                </a>
            </li>
            <li class="kt-nav__item">
                <a href="{{ route('manufacture.index')}}" class="kt-nav__link" data-action="list" data-type="trash">
                    <i class="kt-nav__link-icon kt-nav__link-icon--size fa fa-car"></i>
                    <span class="kt-nav__link-text">Merk Mobil</span>
                </a>
            </li>
            
            <li class="kt-nav__item kt-margin-t-20 kt-margin-b-20">
                <span class="kt-nav__link-title">Transaksi</span>
            </li>
            
            <li class="kt-nav__item">
                <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon fa fa-credit-card"></i>
                    <span class="kt-nav__link-text">Riwayat Transaksi</span>
                </a>
            </li>
            
            <li class="kt-nav__item">
                <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon fa fa-credit-card"></i>
                    <span class="kt-nav__link-text">Daftar Transaksi</span>
                </a>
            </li>
        </ul>
    </div>
</div>
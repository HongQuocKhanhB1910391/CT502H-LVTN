
use KHACHHANG;

create table KhachHang(
	MaKH char(9) primary key,
	HoTenKH nvarchar(50) not null,
	GioiTinh bit default'NAM',
	DiaChi nvarchar(200),
	SoDienThoai int, 
	
);

alter table KhachHang add username nvarchar(50);
alter table KhachHang add password nvarchar(50);
alter table KhachHang add date datetime;

create table NhanVien(
MaNV char(5) primary key,
HoTenNV nvarchar(50),
NgaySinh datetime,
GioiTinh bit default'NAM',
DiaChi nvarchar(200),
accountNV nvarchar(50),
passNV nvarchar(50),
);

create table HoaDon(
SoHD char(5) primary key,
MaKH char(9) not null,
MaNV char(5) not null,
NgayDatHang datetime,
TongTien float(53),

constraint HD_MaKH foreign key(MaKH) references KhachHang(MaKH),
constraint HD_MaNV foreign key(MaNV) references NhanVien(MaNV)
)

create table Laptop(
	MaLT char(9) primary key,
	LoaiLT char(9) not null,
	TenLT nvarchar(50) not null,
	NamXK DATE not null,
	SLTonKho int not null,
	Gia int not null,
	GhiChu nvarchar(200) null,
	)


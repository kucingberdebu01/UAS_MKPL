package Latihan;

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

import java.util.Scanner;

/**
 *
 * @author a
 */
public class Latihan5 {
    public static void main(String[] args){
        String nama;
        Scanner inputan = new Scanner(System.in).useDelimiter("\n");
        System.out.print("Masukkan Nama Lengkap Anda : ");
        nama = inputan.next();
        System.out.print("Halo..."+nama+" Selamat Belajar Java");       
    }  
}
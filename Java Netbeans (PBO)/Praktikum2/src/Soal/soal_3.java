package Soal;

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

import java.util.Scanner;

/**
 *
 * @author a
 */
public class soal_3 {
    public static void main(String[] args){
        Scanner inputan = new Scanner(System.in);
        
        String Nama, 
        Nim, 
        Semester, 
        Kelas;
        
        System.out.print("Masukkan Nama     :");
        Nama = inputan.nextLine();
        
        System.out.print("Masukkan Nim      :");
        Nim = inputan.nextLine();
        
        System.out.print("Masukkan Semester :");
        Semester = inputan.nextLine();
        
        System.out.print("Masukkan Kelas    :");
        Kelas = inputan.nextLine();
        
        System.out.println();
        
        System.out.println("-----Hasil----------------");
        System.out.println("Nama        :       "+ Nama);
        System.out.println("Nim         :       "+ Nim);
        System.out.println("Semester    :       "+ Semester);
        System.out.println("Kelas       :       "+ Kelas);
    }
}
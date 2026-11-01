clc;
clear;
close all;
% Read the color image
img = imread('img1.jpg'); % Replace with your image file
% Display original image
figure;
subplot(2,2,1);
imshow(img);
title('Original Color Image');
% Convert RGB image to HSV
hsvImg = rgb2hsv(img);
% Extract the Value (Brightness) channel
V = hsvImg(:,:,3);
% Perform Histogram Equalization on Value channel
Veq = histeq(V);
% Replace the Value channel with equalized one
hsvImg(:,:,3) = Veq;
% Convert HSV back to RGB
equalizedImg = hsv2rgb(hsvImg);
% Display equalized color image
subplot(2,2,2);
imshow(equalizedImg);
title('Histogram Equalized Color Image');
% Display histogram of original Value channel
subplot(2,2,3);
imhist(V);
title('Original Value Histogram');
% Display histogram of equalized Value channel
subplot(2,2,4);
imhist(Veq);
title('Equalized Value Histogram');
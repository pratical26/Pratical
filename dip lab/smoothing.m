clc;
clear;
close all;
% Read the 8-bit color image
img = imread('img1.jpg');
% Display Original Image
figure;
subplot(2,2,1);
imshow(img);
title('Original Image');
% Image Smoothing using Average Filter
avgFilter = fspecial('average', [5 5]);
smooth_avg = imfilter(img, avgFilter, 'replicate');
subplot(2,2,2);
imshow(smooth_avg);
title('Average Filtered Image');
% Image Sharpening
sharp_img = imsharpen(img, ...
  'Radius', 2, ...
  'Amount', 1.5);
subplot(2,2,3);
imshow(sharp_img);
title('Sharpened Image');